  <?php
include "koneksi.php";
$sql = "SELECT * FROM tb_category";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
?>
  <h3> CATEGORY FOTO</h3>

<p><img src="assets/image/a.PNG" alt="IMG" id="gam"></p>
  <table>
      <tr>
          <th>ID CATEGORY</th>
          <th>NAMA</th>
          <th>TEXT</th>
          <th>ID ALBUM</th>
        </tr>

        <?php while ($row = $stmt->fetch()) { ?>
        
        <tr>
            <td><?php echo $row['id_category'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['text'] ?></td>
            <td><?php echo $row['id_album'] ?></td>
        <\tr>
            <td>
            <a href="index.php?delete=<?php echo $row['id_category'];?>">delete</a>
            </td>
        </tr>

        <?php } ?>
     </table>
        