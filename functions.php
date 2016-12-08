<?php

function enqueue_riottag($handle, $src_or_srcs, $deps=array(), $ver=false, $in_footer=false) {
  global $wprt;
  $wprt->enqueue($handle, $src_or_srcs, $deps, $ver, $in_footer);
}

?>
