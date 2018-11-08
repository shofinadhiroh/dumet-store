<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />

	<title>Pesanan Anda</title>
</head>

<body>

    <strong>Hi, <?php echo $this->session->userdata('nama')?></strong>
    
    <h3>Ringkasan Pesanan</h3>
    <table>
        <tr>
            <th>Nama Item</th>
            <th>Color</th>
            <th>Harga</th>
            <th>Kuantitas</th>
            <th>Sub Total</th>
        </tr>
        <?php foreach($this->cart->contents() as $item): ?>
        <tr>
            <td><?php echo $item['name']?></td>
            <td><?php echo $item['options']['color']?></td>
            <td><?php echo rupiah($item['price'])?></td>
            <td><?php echo $item['qty']?></td>
            <td><?php echo rupiah($item['subtotal'])?></td>
        </tr>
        <?php endforeach; ?>
        
    </table>

    <p><a href="<?php echo site_url('member/konfirmasi_pembayran')?>">Konfirmasi Pembayaran</a></p>

</body>
</html>