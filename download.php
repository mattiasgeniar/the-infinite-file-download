<?php

header("Content-disposition: attachment; filename=ma.ttias.be.bin");
header("Content-type: application/random");

while(true) {
  # Readfile was lot faster than randomly generating pack() data
  readfile('blob_10mb.bin');
}