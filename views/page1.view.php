<div class="container"></div>
<h1>Hello page1</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium, similique distinctio tenetur vero odio aliquam amet quam maiores, assumenda iusto dolore fuga optio. Sequi rerum minima explicabo cumque incidunt? Ratione incidunt delectus sit in necessitatibus ipsum ea, adipisci libero veniam nisi vero modi quaerat expedita? Aliquam quis recusandae, iste doloremque possimus temporibus quaerat eaque eligendi! Nemo voluptatum voluptate incidunt ipsa.</p>
<div class="datas">
    <?php foreach ($datas as $ligne): ?>
        <br>--------<br>
       Information 1: <?= $ligne["data1"] ?>
        <br>
       Information 2: <?= $ligne["data2"] ?>
       <br> -------<br>
    <?php endforeach; ?>
</div>
</div>