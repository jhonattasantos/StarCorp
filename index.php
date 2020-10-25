    <?php 
    require_once 'vendor/autoload.php';
    use StarCorp\NumberPrint;
    $title = 'PHP Developer na StarCorp';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title><?php echo $title; ?> </title>
</head>
<body>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-5"><?php echo $title; ?></h1>
        </div>
    </div>

    <div class="container">  

        <form class="form-inline" method="post">

            <div class="form-group mb-2">
                <input class="form-control" name="limit" id="limit" placeholder="ex: 100" value="">
            </div>
            
            <button type="submit" class="btn btn-primary mx-sm-3 mb-2">Print!</button>
            
        </form>
        
        <?php 
            $limitRequest =  (int) $_POST['limit'];
            $limit = empty($limitRequest) ? 100 : $limitRequest;
        ?>
        <div>
            <small>Total: <?php echo $limit; ?></small>
        </div>
        <?php

            $numberPrint = new NumberPrint(range(1, $limit));
            foreach($numberPrint->display() as $i)  : ?>
                <span class="badge badge-secondary"><?php echo $i; ?></span>            
        <?php endforeach; ?>
    </div>
   

    <script>
        let badge = document.getElementsByClassName('badge');
        Array.prototype.filter.call(badge, function(item){
            if(item.textContent == "StarCorpianos"){
                item.setAttribute("class", "badge badge-danger");
            }

            if(item.textContent == "IT"){
                item.setAttribute("class", "badge badge-warning");
            }

            if(item.textContent == "StarCorp"){
                item.setAttribute("class", "badge badge-success");
            }
        });
        // console.log(badge);
    </script>
</body>
</html>


