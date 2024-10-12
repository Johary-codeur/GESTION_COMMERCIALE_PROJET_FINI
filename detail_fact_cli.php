<?php 
$bdd = new PDO('mysql:host=localhost;dbname=gestion_vente','root','');

$facts = $bdd->query('SELECT * FROM facture_client fc 
JOIN clients c ON c.id_client=fc.id_client 
JOIN ventes v ON v.id_fact_cli=fc.id_fact_cli JOIN produits p ON v.id_produit=p.id_produit
JOIN magasin m ON m.id_magasin=fc.id_magasin WHERE fc.id_fact_cli='.$_GET['id']);

$entetes = $bdd->query('SELECT * FROM facture_client fc 
JOIN clients c ON c.id_client=fc.id_client 
JOIN magasin m ON m.id_magasin=fc.id_magasin where fc.id_fact_cli='.$_GET['id']);

$entete = $entetes->fetch();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .invoice-header h1 {
            margin-top: 0;
        }

        .invoice-details p {
            margin: 5px 0;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .invoice-table th, .invoice-table td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        .invoice-table th {
            background-color: #f2f2f2;
        }

        .invoice-table tfoot td {
            font-weight: bold;
        }

        .text-right {
            text-align: right;
        }

        .btn-print {
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-print:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <div class="invoice-header">
            <h1>Facture</h1>
            <p>Date: <?php echo $entete['date_facture_cli']; ?></p>
        </div>
        <div class="invoice-details">
            <p>Client: <?php echo $entete['nom_client']; ?></p>
            <p>Email: <?php echo $entete['email_client']; ?></p>
            <p>Adresse: <?php echo $entete['adresse_client']; ?></p>
        </div>
        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                $ttl = 0;
                $ttls=0;

                while($fact = $facts->fetch()){

                    if($fact['quantite_vente']>=5){

                        $pu = $fact['prix_gros'];
                    }else{

                        $pu = $fact['prix_detail'];
                    }

                    $ttl = $pu*$fact['quantite_vente'];

                    echo '
                    <tr>
                        <td>'.$fact['nom_produit'].' '.$fact['dimension'].'</td>
                        <td>'.$fact['quantite_vente'].'</td>
                        <td>'.$pu.' Ar</td>
                        <td>'.$ttl.' Ar</td>
                     </tr>

                    ';

                    $ttls = $ttls + $ttl;

                }



                 ?>
                
                
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right">Total</td>
                    <td><?php echo $ttls ?> Ar</td>
                </tr>
            </tfoot>
        </table>
        <button class="btn-print" onclick="window.print()">Imprimer</button>
    </div>
</body>
</html>
