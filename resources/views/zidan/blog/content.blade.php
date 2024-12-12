

    <?php
    $menu = ['Home', 'Sport', 'Finance', 'Health'];
    $sports = ['Sport1', 'Sport2', 'Sport3', 'Sport4'];
    $archives = ['Archive1', 'Archive2', 'Archive3', 'Archive4'];
    $finance_content = [
        ['image' => 'https://placehold.co/300x150', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis odit deleniti minus labore impedit velit rem! Aspernatur itaque ab velit, quae reiciendis ducimus omnis repudiandae id pariatur ut natus quisquam?'],
        ['image' => 'https://placehold.co/300x150', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis odit deleniti minus labore impedit velit rem! Aspernatur itaque ab velit, quae reiciendis ducimus omnis repudiandae id pariatur ut natus quisquam?'],
        ['image' => 'https://placehold.co/300x150', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis odit deleniti minus labore impedit velit rem! Aspernatur itaque ab velit, quae reiciendis ducimus omnis repudiandae id pariatur ut natus quisquam?'],
        ['image' => 'https://placehold.co/300x150', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis odit deleniti minus labore impedit velit rem! Aspernatur itaque ab velit, quae reiciendis ducimus omnis repudiandae id pariatur ut natus quisquam?'],
        ['image' => 'https://placehold.co/300x150', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis odit deleniti minus labore impedit velit rem! Aspernatur itaque ab velit, quae reiciendis ducimus omnis repudiandae id pariatur ut natus quisquam?'],
    ];
    $about_me = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In adipisci suscipit minima asperiores, reprehenderit quaerat cum, excepturi maiores dolore alias eligendi eveniet facere rem, quidem minus aperiam illum nobis perspiciatis!';
    ?>

<div class="container mt-4">

    <div class="text-center mb-4">
        <img src="{{ asset('zidan/th.jpeg') }}" alt="Gambar tidak ada" class="img-fluid rounded shadow" style="max-width: 300px;">
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php foreach ($menu as $item): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><?= $item; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>

    <p class="lead text-center mb-5">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, libero veritatis excepturi odit deserunt placeat id vero magnam numquam.
    </p>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Sports</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($sports as $sport): ?>
                        <li class="list-group-item"><?= $sport; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">Archives</h5>
                </div>
                <ol class="list-group list-group-numbered">
                    <?php foreach ($archives as $archive): ?>
                        <li class="list-group-item"><?= $archive; ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <h4 class="text-center mb-4">Finance Content</h4>
            <?php foreach ($finance_content as $index => $content): ?>
                <div class="card mb-3 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= $content['image']; ?>" class="img-fluid rounded-start" alt="Finance Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $index + 1; ?>.</h5>
                                <p class="card-text"><?= $content['text']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h5 class="mb-0">All About Me</h5>
                </div>
                <div class="text-center p-3">
                    <img src="{{ asset('zidan/th.jpeg') }}" alt="Gambar Anda" class="img-thumbnail mb-3" style="max-width: 150px;">
                </div>
                <div class="card-body">
                    <p><?= $about_me; ?></p>
                </div>
            </div>
        </div>
    </div>

</div>