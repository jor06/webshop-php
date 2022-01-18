<!-- FOOTER VIEW PHP -->
<footer class="footer">
    <?= !is_null($content) && array_key_exists('footerData', $content) ? $content['footerData'] : '' ?>

    <div>
        <h4>Jordy Hoekstra 2022</h4>
    </div>

    <div>
        <button onclick="topFunction()" id="topBtn" title="Back to top">Back to top</button>
    </div>

</footer>
