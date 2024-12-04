
<div class="image">
        <img src="{{ asset('zidan/th.jpeg') }}" alt="gambar anda tidak ada">
    </div>

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
     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, libero veritatis excepturi odit deserunt placeat id vero magnam numquam delectus pariatur quas aut distinctio ea ipsum, blanditiis quae molestias laborum!</p>
    <table class="table">
        <tr>
            <?php foreach ($menu as $tableMenu): ?>
                <th><?php echo $tableMenu; ?></th>
            <?php endforeach; ?>
        </tr>
    </table>

    <table class="table">
        <thead>
            <tr>
                <td>
                    <table class="list">
                        <tr>
                            <td>
                                <ul>Sport
                                    <?php foreach ($sports as $sport): ?>
                                        <li><?php echo $sport; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ol>Archive
                                    <?php foreach ($archives as $archive): ?>
                                        <li><?php echo $archive; ?></li>
                                    <?php endforeach; ?>
                                </ol>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="Finance">
                        <?php foreach ($finance_content as $index => $content): ?>
                            <tr>
                                <td><?php echo $index + 1; ?>.</td>
                                <td>
                                    <img src="<?php echo $content['image']; ?>" alt="">
                                    <td><?php echo $content['text']; ?></td>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </td>
                <td>
                    <table class="Me">
                        <tr>
                            <td>ALL About Me</td>
                        </tr>
                        <tr>
                            <td class="OIP">
                                <img src="{{ asset('zidan/th.jpeg') }}" alt="" class="cihuy">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><?php echo $about_me; ?></p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </thead>
    </table>