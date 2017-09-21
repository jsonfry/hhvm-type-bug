<?hh

namespace Example;

function init() {
    require_once(dirname(__FILE__) . '/Type/Hello.php');

    new Type\Hello();
}

init();

