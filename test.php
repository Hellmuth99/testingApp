<?php
require 'index.php';

function testSum() {
    assert(sum(3, 4) === 7, 'Sum function should return 7');
    echo "All tests passed!";
}

testSum();
