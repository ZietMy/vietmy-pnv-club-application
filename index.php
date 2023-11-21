<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pnv-club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>


        .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        }

        .form {
        width: 700px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin: auto;
        }
        .sub-title{
            font-size: 20px;
            font-weight: 600;
            text-align: right;
            align-content: end;
        }
        .name, .club, .date, .skill{
            margin-bottom: 24px;
        }
        .submit{
            width: 100%;
            background-color: orange;
            color:white;
        }
        /* Radio */
        input[type="radio"]{
            appearance: none;
            width: 16px;
            height: 16px;
            border-radius: 9999px;
            border: 1px solid #ccc;
            margin-right: 6px;
            padding: 0;
        }

        input[type="checkbox"]{
            appearance: none;
            width: 20px;
            height: 16px;
            border: 1px solid #ccc;
            margin-right: 6px;
        }
        input[type="radio"]:checked,
        input[type="checkbox"]:checked{
            border-color: orangered;
            background-color: orangered;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="result.php" method="post" class="form">
            <div class="row name ">
                <label for="" class="col-5 sub-title ">Name</label>
                <input type="text" name="name" class="col-7">
            </div>
            <div class="row club">
                <label for="" class="col-5 sub-title "> Club you want to apply</label>
                <select name="club" class="col-7 " id="club" >
                    <option value="" disabled selected>Select option</option>
                    <option value="Robotic Club" >Robotic Club</option>
                    <option value="Music Club">Music Club</option>
                    <option value="Front-end Club">Eat Club</option>
                    <option value="Back-end Club">Drink  Club</option>
                </select>
            </div>
        

            <div class="row  date">
                <label for="" class="col-5 sub-title">Be time for you</label>

                <div class="col-7 row row-cols-2">
                    <div class="col p-0">
                        <input type="radio" name="date" value="Saturday mornings">Saturday mornings
                    </div>
                    <div class="col p-0">
                        <input type="radio" name="date" value="Saturday afternoons">Saturday afternoons
                    </div>
                    <div class="col p-0">
                        <input type="radio" name="date" value="Sunday afternoons">Sunday afternoons
                    </div>
                </div>
            </div>

            <div class="row skill ">
                <label for="" class="col-5 sub-title">Yours skills</label>
                <div class="col-7 row row-cols-auto">
                    <div class="col-6 p-0">
                        <input type="checkbox" name="skill[]"  id="" value="the best coder">
                        <label for="" class="">the best coder</label>
                    </div>
                    <div class="col-6 p-0">
                        <input type="checkbox" name="skill[]"  id="" value="good in arts">
                        <label for="" class="">good in arts</label>
                    </div>
                    <div class="col-6 p-0">
                        <input type="checkbox" name="skill[]"  id="" value="a super star">
                        <label for="" class="">a super star</label>
                    </div>
                    <div class="col-6 p-0">
                        <input type="checkbox" name="skill[]"  id="" value="a crazy dance">
                        <label for="" class="">a crazy dance</label>
                    </div>
                    <div class="col-6 p-0">
                        <input type="checkbox" name="skill[]"  id="" value="singer">
                        <label for="" class="">singer</label>
                    </div>
                    <div class="col-6 p-0">
                        <input type="checkbox" name="skill[]"  id="" value="good in design">
                        <label for="" class="">good in design</label>
                    </div>
                    <div class="col-6 p-0">
                        <input type="checkbox" name="skill[]"  id="" value="the best eater">
                        <label for="" class="">the best eater</label>
                    </div>
                    <div class="col-6 p-0">
                        <input type="checkbox" name="skill[]"  id="" value="the best eater">
                        <label for="" class="">good in speeches</label>
                    </div>
                </div>
                
            </div>
            <input type="submit" class="submit" value="SUBMIT !!"  >
        </form>
    </div>
</body>
</html>
