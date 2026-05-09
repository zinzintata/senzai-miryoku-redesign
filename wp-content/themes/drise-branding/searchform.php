<?php
/**
 * Search form.
 *
 * @package DriseBranding
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text" for="search-field">サイト内検索</label>
    <input id="search-field" type="search" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="キーワードを入力">
    <button type="submit">検索</button>
</form>
