<?php
$title = "All Courses"; ?>

<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://titan.csit.rmit.edu.au/~e103884/wp/.services/.courses/");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
$decodedData = json_decode($response, true);
curl_close($curl);
?>

<?php require_once("header.php"); ?>

<main>
    <h1>All Courses</h1>
    <div>
        <table class="table table-striped course_table">
            <tbody>
                <tr>
                    <th>courseID</th>
                    <th>title</th>
                    <th>creditPoints</th>
                    <th>career</th>
                    <th>coordinator</th>
                    <th>View Detail<th>
                </tr>
                <?php  foreach($decodedData as $row): ?>
                    <tr>
                        <td><?=$row['courseID'];?></td>
                        <td><?=$row['title'];?></td>
                        <td><?=$row['creditPoints'];?></td>
                        <td><?=$row['career'];?></td>
                        <td><?=$row['coordinator'];?></td>
                        <?php echo '<td><a href="./details.php?id='.$row['courseID'].'">detail</a></td>' ?>
                        
                    </tr>
                <?php endforeach;?>
				
            </tbody>
        </table>
    </div>
</main>

<?php require_once("footer.php"); ?>
