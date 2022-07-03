<?php 
  get_header();

  function haveSocial($social) {
    if (!empty($social)) {
      return "'$social',";
    }
    else return '';
  }

  function socialList($str) {
    $str = preg_replace('/^\h*\v+/m', '', $str);
    return $str;
  }
?>

<?php
  $authorPosition = get_post_meta(get_the_ID(), 'authorPos', true);
  $authorFacebookLink = get_post_meta(get_the_ID(), 'authorFacebookLink', true);
  $authorLinkedinLink = get_post_meta(get_the_ID(), 'authorLinkedinLink', true);
  $authorInstagramLink = get_post_meta(get_the_ID(), 'authorInstagramLink', true); 
  $authorImage = wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'authorAvatar', true), 'large');
  $currentLang = pll_current_language();
?>

<section class="author">
  <div class="container author__container">
    <div class="author__inner">
        <div class="author__photo-social">
          <div class="author__photo-social-wrapper">
          <img src="<?php echo $authorImage ?>" alt="<?php echo $currentLang = 'en' ? 'Author`s photo' : 'Фото автора' ?>">
          </div>
          <ul class="author__photo-social-list author__social">
            <?php if ($authorFacebookLink) { 
              echo '
              <li class="author__social-item">
                <a href="'.$authorFacebookLink.'" rel="noreferrer noopener" target="_blank">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNTAgMEMyMi4zODU4IDAgMCAyMi4zODU4IDAgNTBDMCA3Ny42MTQyIDIyLjM4NTggMTAwIDUwIDEwMEM3Ny42MTQyIDEwMCAxMDAgNzcuNjE0MiAxMDAgNTBDMTAwIDIyLjM4NTggNzcuNjE0MiAwIDUwIDBaTTU1LjIxMTcgNTIuMTk2M1Y3OS4zOTg5SDQzLjk1NjZWNTIuMTk3M0gzOC4zMzM1VjQyLjgyMzJINDMuOTU2NlYzNy4xOTQ5QzQzLjk1NjYgMjkuNTQ3NSA0Ny4xMzE3IDI1IDU2LjE1MjYgMjVINjMuNjYyOFYzNC4zNzUySDU4Ljk2ODRDNTUuNDU2OCAzNC4zNzUyIDU1LjIyNDUgMzUuNjg1MyA1NS4yMjQ1IDM4LjEzMDJMNTUuMjExNyA0Mi44MjIxSDYzLjcxNkw2Mi43MjA5IDUyLjE5NjNINTUuMjExN1oiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=" alt="Facebook">
                  <span class="visually-hidden">Facebook</span>
                </a>
              </li>'; 
            } 
            if ($authorLinkedinLink) {
              echo '
              <li class="author__social-item">
                <a href="'.$authorLinkedinLink.'" rel="noreferrer noopener" target="_blank">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNTAgMEMyMi4zODU4IDAgMCAyMi4zODU4IDAgNTBDMCA3Ny42MTQyIDIyLjM4NTggMTAwIDUwIDEwMEM3Ny42MTQyIDEwMCAxMDAgNzcuNjE0MiAxMDAgNTBDMTAwIDIyLjM4NTggNzcuNjE0MiAwIDUwIDBaTTI4LjEyOTkgMzMuOTcyNUMyOC4xMjk5IDM2LjY3OTUgMzAuMTY0OSAzOC44NDU1IDMzLjMxMTMgMzguODQ1NUMzNy42OSAzOC44NDU1IDM4LjcxMyAzNS41OTY4IDM4LjY3NzIgMzMuOTcyNUMzOC42MTYxIDMxLjIwNDQgMzYuNjQyMiAyOS4wOTgzIDMzLjQzNDcgMjkuMDk4M0MzMC4yMjcxIDI5LjA5ODMgMjguMTI5OSAzMS4yMDQ0IDI4LjEyOTkgMzMuOTcyNVpNMjguNjgzOSA3MC45MDdIMzguMDYwNFY0Mi42OTc1SDI4LjY4MzlWNzAuOTA3Wk03MS44NzAxIDcwLjkwN0g2Mi40OTQ4VjU1LjgxNTZDNjIuNDk0OCA1Mi4wMjI5IDYxLjEzNzIgNDkuNDM2MyA1Ny43NDQ1IDQ5LjQzNjNDNTUuMTU0NCA0OS40MzYzIDUzLjYxMTcgNTEuMTgxMSA1Mi45MzM4IDUyLjg2NTRDNTIuNjg1OSA1My40NjgxIDUyLjYyNTQgNTQuMzEwNSA1Mi42MjU0IDU1LjE1MzVWNzAuOTA3SDQzLjI0OTVDNDMuMjQ5NSA3MC45MDcgNDMuMzcyMiA0NS4zNDQgNDMuMjQ5NSA0Mi42OTc1SDUyLjYyNTRWNDYuNjkxN0M1My44NzE0IDQ0Ljc2OTUgNTYuMTAwOCA0Mi4wMzU0IDYxLjA3NTUgNDIuMDM1NEM2Ny4yNDQ0IDQyLjAzNTQgNzEuODcwMSA0Ni4wNjcyIDcxLjg3MDEgNTQuNzMxN1Y3MC45MDdaIiBmaWxsPSJ3aGl0ZSIvPgo8L3N2Zz4K" alt="Linkedin">
                  <span class="visually-hidden">Linkedin</span>
                </a>
              </li>';
            }
            if ($authorInstagramLink) {
            echo '
              <li class="author__social-item">
                <a href="'.$authorInstagramLink.'" rel="noreferrer noopener" target="_blank">
                  <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNTAgMEMyMi4zODU4IDAgMCAyMi4zODU4IDAgNTBDMCA3Ny42MTQyIDIyLjM4NTggMTAwIDUwIDEwMEM3Ny42MTQyIDEwMCAxMDAgNzcuNjE0MiAxMDAgNTBDMTAwIDIyLjM4NTggNzcuNjE0MiAwIDUwIDBaTTM5LjAwNyAyMy40OTQ0QzQxLjg1MDkgMjMuMzY1IDQyLjc2IDIzLjMzMzMgNDkuOTk4NSAyMy4zMzMzQzU3LjIzOTIgMjMuMzMzMyA1OC4xNDUgMjMuMzY1IDYwLjk4ODkgMjMuNDk0NEM2My44Mjc4IDIzLjYyNDQgNjUuNzY2NyAyNC4wNzM5IDY3LjQ2NjcgMjQuNzMzM0M2OS4yMjIzIDI1LjQxMzkgNzAuNzA1NyAyNi4zMjUgNzIuMTg5IDI3LjgwODRDNzMuNjcyNCAyOS4yOTA2IDc0LjU4MzUgMzAuNzc4NCA3NS4yNjY4IDMyLjUzMjNDNzUuOTIyNCAzNC4yMjc5IDc2LjM3MjQgMzYuMTY1NyA3Ni41MDU3IDM5LjAwNDZDNzYuNjMzNSA0MS44NDkxIDc2LjY2NjggNDIuNzU4IDc2LjY2NjggNTAuMDAwM0M3Ni42NjY4IDU3LjI0MjYgNzYuNjMzNSA1OC4xNDkzIDc2LjUwNTcgNjAuOTkzN0M3Ni4zNzI0IDYzLjgzMTUgNzUuOTIyNCA2NS43Njk5IDc1LjI2NjggNjcuNDY2Qzc0LjU4MzUgNjkuMjE5NCA3My42NzI0IDcwLjcwNzIgNzIuMTg5IDcyLjE4OTRDNzAuNzA3MyA3My42NzI3IDY5LjIyMTcgNzQuNTg2MSA2Ny40Njg0IDc1LjI2NzJDNjUuNzcxNyA3NS45MjY3IDYzLjgzMTcgNzYuMzc2MSA2MC45OTI4IDc2LjUwNjFDNTguMTQ4MyA3Ni42MzU2IDU3LjI0MjIgNzYuNjY3MiA0OS45OTkzIDc2LjY2NzJDNDIuNzU3NiA3Ni42NjcyIDQxLjg0OTIgNzYuNjM1NiAzOS4wMDQ4IDc2LjUwNjFDMzYuMTY2NCA3Ni4zNzYxIDM0LjIyODEgNzUuOTI2NyAzMi41MzE0IDc1LjI2NzJDMzAuNzc4NiA3NC41ODYxIDI5LjI5MDggNzMuNjcyNyAyNy44MDkxIDcyLjE4OTRDMjYuMzI2MyA3MC43MDcyIDI1LjQxNTIgNjkuMjE5NCAyNC43MzM1IDY3LjQ2NTVDMjQuMDc0NiA2NS43Njk5IDIzLjYyNTIgNjMuODMyMSAyMy40OTQ2IDYwLjk5MzJDMjMuMzY1NyA1OC4xNDg3IDIzLjMzMzUgNTcuMjQyNiAyMy4zMzM1IDUwLjAwMDNDMjMuMzMzNSA0Mi43NTggMjMuMzY2OCA0MS44NDg1IDIzLjQ5NDEgMzkuMDA0MUMyMy42MjE4IDM2LjE2NjIgMjQuMDcxOCAzNC4yMjc5IDI0LjczMyAzMi41MzE4QzI1LjQxNjMgMzAuNzc4NCAyNi4zMjc0IDI5LjI5MDYgMjcuODEwOCAyNy44MDg0QzI5LjI5MyAyNi4zMjU2IDMwLjc4MDggMjUuNDE0NSAzMi41MzQ3IDI0LjczMzNDMzQuMjMwMyAyNC4wNzM5IDM2LjE2ODEgMjMuNjI0NCAzOS4wMDcgMjMuNDk0NFpNNDkuOTk4NSAyMy4zMzMzQzQ5Ljk5OTkgMjMuMzMzMyA1MC4wMDEzIDIzLjMzMzMgNTAuMDAyNyAyMy4zMzMzSDQ5Ljk5NDNDNDkuOTk1NyAyMy4zMzMzIDQ5Ljk5NzEgMjMuMzMzMyA0OS45OTg1IDIzLjMzMzNaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTQ3LjYxMDIgMjguMTM5QzQ4LjA3NDcgMjguMTM4MyA0OC41NzQ0IDI4LjEzODUgNDkuMTEzNyAyOC4xMzg3TDUwLjAwMjUgMjguMTM5QzU3LjEyMjUgMjguMTM5IDU3Ljk2NjQgMjguMTY0NSA2MC43NzgxIDI4LjI5MjNDNjMuMzc4MiAyOC40MTEyIDY0Ljc4OTMgMjguODQ1NyA2NS43MjkzIDI5LjIxMDdDNjYuOTczNyAyOS42OTQgNjcuODYxIDMwLjI3MTggNjguNzkzOCAzMS4yMDUxQzY5LjcyNzEgMzIuMTM4NSA3MC4zMDQ5IDMzLjAyNzQgNzAuNzg5MyAzNC4yNzE4QzcxLjE1NDMgMzUuMjEwNyA3MS41ODkzIDM2LjYyMTkgNzEuNzA3NyAzOS4yMjE5QzcxLjgzNTUgNDIuMDMzIDcxLjg2MzIgNDIuODc3NSA3MS44NjMyIDQ5Ljk5NDJDNzEuODYzMiA1Ny4xMTEgNzEuODM1NSA1Ny45NTU0IDcxLjcwNzcgNjAuNzY2NkM3MS41ODg4IDYzLjM2NjYgNzEuMTU0MyA2NC43Nzc3IDcwLjc4OTMgNjUuNzE2NkM3MC4zMDYgNjYuOTYxMSA2OS43MjcxIDY3Ljg0NzIgNjguNzkzOCA2OC43OEM2Ny44NjA0IDY5LjcxMzMgNjYuOTc0MyA3MC4yOTExIDY1LjcyOTMgNzAuNzc0NEM2NC43OTA0IDcxLjE0MTEgNjMuMzc4MiA3MS41NzQ0IDYwLjc3ODEgNzEuNjkzM0M1Ny45NjcgNzEuODIxMSA1Ny4xMjI1IDcxLjg0ODkgNTAuMDAyNSA3MS44NDg5QzQyLjg4MTggNzEuODQ4OSA0Mi4wMzc5IDcxLjgyMTEgMzkuMjI2OCA3MS42OTMzQzM2LjYyNjggNzEuNTczMyAzNS4yMTU2IDcxLjEzODkgMzQuMjc1MSA3MC43NzM5QzMzLjAzMDYgNzAuMjkwNSAzMi4xNDE3IDY5LjcxMjggMzEuMjA4NCA2OC43Nzk0QzMwLjI3NSA2Ny44NDYxIDI5LjY5NzIgNjYuOTU5NCAyOS4yMTI4IDY1LjcxNDRDMjguODQ3OCA2NC43NzU1IDI4LjQxMjggNjMuMzY0NCAyOC4yOTQ0IDYwLjc2NDNDMjguMTY2NyA1Ny45NTMyIDI4LjE0MTEgNTcuMTA4NyAyOC4xNDExIDQ5Ljk4NzZDMjguMTQxMSA0Mi44NjY0IDI4LjE2NjcgNDIuMDI2NCAyOC4yOTQ0IDM5LjIxNTJDMjguNDEzMyAzNi42MTUyIDI4Ljg0NzggMzUuMjA0MSAyOS4yMTI4IDM0LjI2NDFDMjkuNjk2MSAzMy4wMTk2IDMwLjI3NSAzMi4xMzA3IDMxLjIwODQgMzEuMTk3NEMzMi4xNDE3IDMwLjI2NCAzMy4wMzA2IDI5LjY4NjIgMzQuMjc1MSAyOS4yMDE4QzM1LjIxNTEgMjguODM1MSAzNi42MjY4IDI4LjQwMTggMzkuMjI2OCAyOC4yODIzQzQxLjY4NjggMjguMTcxMiA0Mi42NDAyIDI4LjEzNzkgNDcuNjEwMiAyOC4xMzIzVjI4LjEzOVpNNjQuMjM2NyAzMi41NjdDNjIuNDcgMzIuNTY3IDYxLjAzNjYgMzMuOTk4NyA2MS4wMzY2IDM1Ljc2NkM2MS4wMzY2IDM3LjUzMjYgNjIuNDcgMzguOTY2IDY0LjIzNjcgMzguOTY2QzY2LjAwMzMgMzguOTY2IDY3LjQzNjcgMzcuNTMyNiA2Ny40MzY3IDM1Ljc2NkM2Ny40MzY3IDMzLjk5OTMgNjYuMDAzMyAzMi41NjU5IDY0LjIzNjcgMzIuNTY1OVYzMi41NjdaTTM2LjMwODYgNDkuOTk5OUMzNi4zMDg2IDQyLjQzNzEgNDIuNDQwMyAzNi4zMDUzIDUwLjAwMzIgMzYuMzA1M0g1MC4wMDI2QzU3LjU2NTUgMzYuMzA1MyA2My42OTU1IDQyLjQzNzEgNjMuNjk1NSA0OS45OTk5QzYzLjY5NTUgNTcuNTYyOCA1Ny41NjYgNjMuNjkxNyA1MC4wMDMyIDYzLjY5MTdDNDIuNDQwMyA2My42OTE3IDM2LjMwODYgNTcuNTYyOCAzNi4zMDg2IDQ5Ljk5OTlaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTUwLjAwMjMgNDEuMTExNkM1NC45MTEyIDQxLjExMTYgNTguODkxMiA0NS4wOTExIDU4Ljg5MTIgNTAuMDAwNkM1OC44OTEyIDU0LjkwOTUgNTQuOTExMiA1OC44ODk1IDUwLjAwMjMgNTguODg5NUM0NS4wOTI4IDU4Ljg4OTUgNDEuMTEzMyA1NC45MDk1IDQxLjExMzMgNTAuMDAwNkM0MS4xMTMzIDQ1LjA5MTEgNDUuMDkyOCA0MS4xMTE2IDUwLjAwMjMgNDEuMTExNlY0MS4xMTE2WiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+Cg==" alt="Instagram">
                  <span class="visually-hidden">Instagram</span>     
                </a>
              </li>';
            } ?>
          </ul>
        </div>
        <div class="author__info">
          <h1 class="author__info-name"><?php the_title(); ?></h1>
          <p class="author__info-position"><?php echo $authorPosition ?></p>
          <div class="author__info-bio">
            <?php the_post(); ?>
            <?php if (get_the_content()): ?> 
              <?php the_content(); ?>
            <?php endif; ?>
          </div>
        </div>
    </div>

  </div>
</section>

<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Person",
  "name": "<?php the_title(); ?>",
  "image": "<?php echo $authorImage; ?>",
  "jobTitle": "<?php echo $authorPosition ?>",
  "worksFor": {
    "@type": "Organization",
    "name": "Purrweb"
  }
  <?php if ($authorFacebookLink  || $authorLinkedinLink || $authorTwitterLink) {
    echo socialList(
  '"sameAs": [ 
    '.haveSocial($authorFacebookLink).'
    '.haveSocial($authorLinkedinLink).'
    '.haveSocial($authorInstagramLink).'
  ]');
  } ?>
}
</script>

<?php get_footer(); ?>