<?php
    foreach ($cards as $card) {
        echo '<h2>';
        echo 'id：' . $card->id . 'のカードや';
        echo '</h2><p>';
        echo '表：' . $card->card_front ;
        echo '</p><p>';
        echo '裏：' . $card->card_back;
        echo '</p>';
}
?>
<style>
    h2 {
        color: blue;
        margin: 0;
        margin-top: 10px;
    }
    p {
        margin: 0;
    }
</style>