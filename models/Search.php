<?php 
class Search {
    public static function save($query, $maxAmount, $products) {

        $db = Db::getConnection();

        $sql = 'INSERT INTO search (query, max_amount, products) VALUES (:query, :max_amount, :products)';

        $products = json_encode($products);

        $result = $db->prepare($sql);
        $result->bindParam(':query', $query, PDO::PARAM_STR);
        $result->bindParam(':max_amount', $maxAmount, PDO::PARAM_INT);
        $result->bindParam(':products', $products, PDO::PARAM_STR);

        return $result->execute();
    }

	public static function getHistory() {

		$db = Db::getConnection();
        $products = [];

        $result = $db->query('SELECT * FROM search');
        $result->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($result->fetchAll() as $item) {
            $products[] = [
                'query' => $item['query'],
                'max_amount' => $item['max_amount'],
                'products' => json_decode($item['products'])
            ];
        }

		return $products;
	}
}