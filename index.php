<?php

// Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri emboli) da restituire all’utente

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>
    <header class="my-3">
        <h1 class="text-center">Strong Password Generator</h1>
        <h4 class="text-secondary text-center">Genera una password sicura</h4>
    </header>
    <div class="newsletter bg-dark text-white p-5 d-flex justify-content-around">
        <div class="text mt-4">
            <h6>Lunghezza password:</h6>
            <h6 class="mt-5">Consenti ripetizioni di uno o più caratteri:</h6>
        </div>
        <form action="index.php" method="GET">
            <div class="mb-3">
                <label for="number" class="form-label"></label>
                <input type="number" class="form-control" name="number" id="number" aria-describedby="numberHelpId" placeholder="numero di caratteri">
                <small id="emailHelpId" class="form-text text-muted">Scegli il numero di caratteri per la tua password</small>
            </div>
            <div class="radio">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio" value="si" checked>
                    <label class="form-check-label" for="radio">Si</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" id="radio2" value="0">
                    <label class="form-check-label" for="radio2">No</label>
                </div>
            </div>
            <div class="checkbox mt-3">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="lettere" id="lettere" value="checkedValue">
                        Lettere
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="numeri" id="numeri" value="checkedValue">
                        Numeri
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="simboli" id="simboli" value="checkedValue">
                        Simboli
                    </label>
                </div>
            </div>
            <div class="buttons mt-3">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </div>

        </form>
    </div>
</body>

</html>