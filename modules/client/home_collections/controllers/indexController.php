<?php
function construct() {
    load_model('index');
}
function indexAction() {
    $id = $_GET['id'];
    $data['home_collection'] = get_list_best_selling();
    $data['home_list_cate_football'] = get_list_categories_football();
    $data['home_list_cate_shoes'] = get_list_categories_shoes();
    $data['home_list_product_by_id_cate'] = get_list_product_by_id_Cate($id);
    load_view('index',$data);
}


?>