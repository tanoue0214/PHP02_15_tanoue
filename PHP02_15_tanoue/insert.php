<?php

// 入力確認処理
if(
    !isset($_POST["book_name"]) || $_POST["book_name"]=="" ||
    !isset($_POST["book_url"]) || $_POST["book_url"]=="" ||
    !isset($_POST["book_comment"]) || $_POST["book_comment"]=="" 

){
    exit('ParamError');

}

// POSTのデータ取得
$name=$_POST["name"];

// DB接続

try {
    $pdo=new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
    exit( 'DbConnectError:' . $e->getMessage() ); }


 //データ登録SQL作成
    $sql="INSERT INTO gs_bm_table ( id, book_name, book_url, book_comment, datetime ) VALUES( NULL, :a1, :a2, :a3, sysdate() )";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':a1', $book_name, PDO:: PARAM_STR); 
    $stmt->bindValue(':a2', $book_url, PDO:: PARAM_STR);
    $stmt->bindValue(':a3', $book_comment, PDO:: PARAM_STR);
    // 数字だったら、STR→INTにする（今回は数字でないのでSTR）
//SQL実行
    $flag = $stmt->execute(); 


// データ登録処理の後
if($status==false){
    $error=$stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    header("Location: index.php");
    exit;
}


?>