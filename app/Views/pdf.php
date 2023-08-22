<style>
    table,td,th {
        border:1px solid #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td, th {
         padding: 2px;
         text-align: center;
    }

    th {
        background-color: #ccc;
    }

    @page {
        margin: 10px;
    }
</style>

<h3>Data Siswa</h3>
   <?php 
   $pdf = false;
   if(strpos(current_url(), "printpdf")) {
      $pdf = true;
   }
   if ($pdf == false){
   ?>
       <input type="button" value="Print PDF" onclick="window.open('<?= site_url('pdf/printpdf') ?>', 'blank')">
       <?php } ?>
<table>
    <tr>
        <td>Nama</td>
        <td>NIS</td>
        <td>Email</td>
    </tr>
    <?php foreach($siswa as $s) : ?>
        <tr>
            <td><?= $s['name'] ?></td>
            <td><?= $s['nis'] ?></td>
            <td><?= $s['email'] ?></td>
        </tr>
        <?php endforeach; ?>
</table>
