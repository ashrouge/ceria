<?php 
include 'header.php';
?>

<div class="container">
    <h2 style="width: 100%; border-bottom: 4px solid gray"><b>Master Produk</b></h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Comment</th>
                <th scope="col">Date Added</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $result = mysqli_query($conn, "SELECT * FROM comments");
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['username'];  ?></td>
                    <td><?= $row['comment']; ?></td>
                    <td><?= $row['date_added']; ?></td>
                    <td>
                        <a href="proses/del_komen.php?id=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Komentar?')">
                            <i class="glyphicon glyphicon-trash"></i> Delete
                        </a>
                    </td>
                </tr>
            <?php
                $no++; 
            }
            ?>
        </tbody>
    </table>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
include 'footer.php';
?>
