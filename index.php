<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <form action="result.php" method="post">
            <div class="row text-center pb-3">
                <div class="col-4 text-end">Name</div>
                <div class="col-8 text-start">
                    <input type="text" name="name">
                </div>
            </div>
            <div class="row text-center pb-3">
                <div class="col-4 text-end">Club you want to apply</div>
                <div class="col-8 text-start">
                    <select class="form-select" name="club">
                        <option value="Robotic Club" checked>Robotic Club</option>
                        <option value="Running Club">Running Club</option>
                        <option value="Swimming Club">Swimming Club</option>
                    </select>
                </div>
            </div>
            <div class="row text-center pb-3">
                <div class="col-4 text-end">
                    <label>Best time for you:</label>
                </div>
                <div class="col-8 text-start">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="time" id="time1" value="Saturday mornings">
                        <label class="btn btn-outline-primary" for="time1">Saturday mornings</label>

                        <input type="radio" class="btn-check" name="time" id="time2" value="Saturday afternoons">
                        <label class="btn btn-outline-primary" for="time2">Saturday afternoons</label>

                        <input type="radio" class="btn-check" name="time" id="time3" value="Sunday afternoons">
                        <label class="btn btn-outline-primary" for="btnradio3">Sunday afternoons</label>
                    </div>
                </div>
            </div>
            <div class="row text-center pb-3">
                <div class="col-4 text-end">
                    <label>Your skills:</label>
                </div>
                <div class="col-8 text-start pb-3">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" name="skill" id="skill_1" value="the best coder">
                        <label class="btn btn-outline-primary" for="skill_1">the best coder</label>

                        <input type="checkbox" class="btn-check" name="skill" id="skill_3" value="a super start">
                        <label class="btn btn-outline-primary" for="skill_3">a super start</label>

                        <input type="checkbox" class="btn-check" name="skill" id="skill_5" value="singer">
                        <label class="btn btn-outline-primary" for="skill_5">singer</label>

                        <input type="checkbox" class="btn-check" name="skill" id="skill_7" value="the best eater">
                        <label class="btn btn-outline-primary" for="skill_7">the best eater</label>
                    </div>
                </div>
                <div class="col-4"></div>
                <div class="col-8 text-start">
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" name="skill_2" id="skill_2" value="good in arts">
                        <label class="btn btn-outline-primary" for="skill_2">good in arts</label>

                        <input type="checkbox" class="btn-check" name="skill_2" id="skill_4" value="a crazy dancer">
                        <label class="btn btn-outline-primary" for="skill_4">a crazy dancer</label>

                        <input type="checkbox" class="btn-check" name="skill_2" id="skill_6" value="good dancer">
                        <label class="btn btn-outline-primary" for="skill_6">good in design</label>

                        <input type="checkbox" class="btn-check" name="skill_2" id="skill_8" value="good in speeches">
                        <label class="btn btn-outline-primary" for="skill_8">good in speeches</label>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-warning col-4">submit</button>
            </div>
        </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    
</body>


</html>