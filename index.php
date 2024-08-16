<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Offline</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
</head>

<body>
    <!-- Your content here -->
    <h1>Test Heading</h1>
    <br>
    <p>Test Paragraph,
        <br>
        <br>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro alias earum eaque quam, corporis natus voluptate incidunt possimus maiores totam mollitia nisi. Voluptatibus similique ullam, minus blanditiis totam quod nobis cupiditate? Quis, laboriosam maxime. Nulla dolore quibusdam, et unde rem dolores aut, temporibus perferendis repellendus architecto nam quae, ducimus ullam.
    </p>

    <br>
    <br>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Include jQuery and then Bootstrap Bundle JS (includes Popper.js) -->
    <script src="./bootstrap/jquery-3.7.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>