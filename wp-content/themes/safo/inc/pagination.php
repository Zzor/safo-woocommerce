<?php 

function margaux_paginate(): string {
  return '<div class="c-pagination">' . 
  paginate_links(['prev_next' => false])
  . '</div>';
}
