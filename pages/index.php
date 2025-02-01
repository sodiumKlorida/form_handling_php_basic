<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;

            width: 15rem;

            row-gap: 1rem;

            margin: auto;
            margin-top: 7rem;
        }

        .success_alert {
            position: fixed;
            z-index: 10;

            width: 100%;

            top: 5px;

            p {
                border: solid black 1px;
                text-align: center;
                padding: 20px 20px;
            }
        }

        .error_alert {
            position: fixed;
            z-index: 10;

            width: 100%;

            top: 5px;

            p {
                border: solid black 1px;
                text-align: center;
                padding: 20px 20px;
            }
        }
        .error_alert_nama {
            position: fixed;
            z-index: 10;

            width: 100%;

            top: 5px;

            p {
                border: solid black 1px;
                text-align: center;
                padding: 20px 20px;
            }
        }

        .error_alert_saran {
            position: fixed;
            z-index: 10;

            width: 100%;

            top: 5px;

            p {
                border: solid black 1px;
                text-align: center;
                padding: 20px 20px;
            }
        }

        .refresh {
            text-align: center;

            margin: auto;
            margin-top: 2rem;
            
            a {
                width: 10rem;
                border: 1px solid black;
                text-decoration: none;
                color: black;
                padding: 5px 15px;
            }
        }

        
    </style>

</head>
<body>
    <div class="success_alert">
        <?php if(isset($_GET['success'])):?>
            <p>Saran Berhasil Dikirim</p>
        <?php endif; ?>
    </div>

    <div class="error_alert">
        <?php if(isset($_GET['errors']) && $_GET['errors'] == "all"):?>
            <p>nama dan saran belum diisi</p>
        <?php endif; ?>
    </div>

    <div class="error_alert_nama">
        <?php if(isset($_GET['errors']) && $_GET['errors'] == "nama"):?>
            <p>nama belum diisi</p>
        <?php endif; ?>
    </div>

    <div class="error_alert_saran">
        <?php if(isset($_GET['errors']) && $_GET['errors'] == "saran"):?>
            <p>saran belum diisi</p>
        <?php endif; ?>
    </div>

    <form action="../controller/form_handler.php" method="post">
        <input type="text" name="form_nama" placeholder="nama">
        <input type="text" name="form_saran" placeholder="saran">
        <button type="submit">Kirim</button>
    </form>
    
    <div class="refresh">
        <a href="index.php">refresh</a>
    </div>
</body>
</html>
