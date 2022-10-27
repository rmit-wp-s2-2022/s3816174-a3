<?php
$title = "Course Detail"; ?>

<?php
$id = $_GET['id'];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.courses/?id=".$id);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
$decodedData = json_decode($response);
curl_close($curl);
?>

<?php require_once("header.php"); ?>


<main>
    <h1>Course Detail</h1>
    <div class="detail">
        <h3>courseID:<?php echo $decodedData->courseID ?></h3>
        <h3>title:<?php echo $decodedData->title ?></h3>
        <h3>creditPoints:<?php echo $decodedData->creditPoints ?></h3>
        <h3>career:<?php echo $decodedData->career ?></h3>
        <h3>coordinator:<?php echo $decodedData->coordinator ?></h3>
        <h2>enrolled students:</h2>
        <table class="course_table" border="1" cellspacing="1">
            <tbody>
                <tr>
                    <th>studentID</th>
                    <th>firstName</th>
                    <th>lastName</th>
                    <th>mobilePhone</th>
                </tr>
                <tr>
                    <td>s1234567</td>
                    <td>Frank</td>
                    <td>Kendall</td>
                    <td>0412345678</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php require_once("footer.php"); ?>
