<?php
class SearchController {
	public function actionIndex() {

		require_once (ROOT.'/view/search/index.php');

		return true;

	}

    public function actionSearch() {

        if (isset($_POST['submit'])) {

            $productsArr = Parser::getPage([
                'url' => 'https://goods.ru/catalog/?q='.$_POST['query'],
                'useragent' => $_SERVER["HTTP_USER_AGENT"],
                'max_amount' => $_POST['max_amount']
            ]);

            if (!empty($productsArr['data']['content'])) {
                Search::save($_POST['query'], $_POST['max_amount'], $productsArr['data']['content']);
            }
        }

        require_once (ROOT.'/view/search/search.php');

        return true;
    }

    public function actionHistory() {
        $historyArr = Search::getHistory();

        require_once (ROOT.'/view/search/history.php');

        return true;

    }
}