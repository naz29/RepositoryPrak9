<?php
include "koneksi.php";
$sql = "SELECT * FROM tb_album";
$stmt = $koneksi->prepare($sql);
$stmt->execute();
?>
  <h3> MY FAVOURITE ALBUM </h3>
  
      <th><img src="assets/image/a.PNG" alt="IMG" id="gam"></th>
      <th><img src="assets/image/b.PNG" alt="IMG" id="gam"></th>
      <th><img src="assets/image/c.PNG" alt="IMG" id="gam"></th>


<p>
<tabel>
    <tr>
          <th>ID ALBUM</th>
          <th>NAMA</th>
          <th>TEXT</th>
          <th>ID FOTO</th>
      </tr>

        <?php while ($row = $stmt->fetch()) { ?>
        
        <tr>
            <td><?php echo $row['id_album'] ?></td>
            <td><?php echo $row['nama'] ?></td>
            <td><?php echo $row['text'] ?></td>
            <td><?php echo $row['id_foto'] ?></td>
            <td>
            <a href="index.php?delete=<?php echo $row['id_album'];?>">delete</a>
            </td>
        </tr>

        <?php } ?>
     </table>
</p>
    
     