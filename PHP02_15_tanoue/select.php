<?php
$view = ""; // 事前にこれをグローバル変数で定義
if($status==false){ // 文面
    $error = $stmt->errorInfo();   //$stmt の中から errorInfo() にてエラー内容を取得
    exit("QueryError:".$error[2]); //errorInfo() の中で文字列として人間が読める文面が[2]番に入っているためこれを取得。

}else{ // エラーじゃない場合。登録の時は header() で元のページにリダイレクトさせるけど、表示の場合は現状 $stmt にデータが入っているからそれを表示させるだけ。

    $view .= '<table>'; 

    $view .= '<tr>';                     
    $view .= '<th>'."書籍名".'</th>'; 
    $view .= '<th>'."書籍URL".'</th>'; 
    $view .= '<th>'."コメント".'</th>'; 
    $view .= '</tr>';  

    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){ //fetch() 関数はレコードを 1 行ずつ取り出すという意味。100 件データ（レコード）があったら自動で 100 件回る。そして $result に配列（FETCH_ASSOC で配列で返してくれる）で入れてくれる。

        $view .= '<tr>';    
        $view .= '<td>'.$result["book_name"]."：".'</td>'; 
        $view .= '<td>'.$result["book_url"]."：".'</td>'; 
        $view .= '<td>'.$result["book_comment"].'</td>'; 
        $view .= '</tr>';  

    }
    $view .= '</table>';
}
?>