<?php
//use yii\db\Query;
//
//$query = new Query;
//// compose the query
//$query->select('id, username')
//    ->from('user')
//    ->limit(10);
//// build and execute the query
//$rows = $query->all();
//echo "<pre>";
//print_r($rows);
//echo "</pre>";
// alternatively, you can create DB command and execute it

$user = \dektrium\user\models\User::find()->all();

foreach ($user as $index=>$users)
{
    if($users->id === 14) {
        echo $users->username . "<br>";
    }}

$projects = \app\models\Project::find()->all();
$userid = Yii::$app->getUser()->id;
foreach ($projects as $index=>$project)
{
    if($project->uid === $userid)
    {
        $pid = $project->id;
        echo "<br>";
        echo $project->sup_name;
    }
}
?>