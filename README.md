# Simple Human Class Test

This is simple demonstration of some OOP principles.

All classes are located in src/Pine directory.

Usage example can be seen in index.php file.

Example:

    include 'vendor/autoload.php';
    
    use Pine\Woman;
    use Pine\Man;
    use Pine\Child;
    use Pine\Enum\Gender;
    
    $woman = new Woman('26.09.1986', 'Jelena', 'Jovanovic');
    $man = new Man('15.02.1982', 'Marko', 'Jovanovic');
    $child = new Child('06.05.2011', Gender::MALE, 'Nikola', 'Jovanovic');
    
    $woman->goHome();
    $woman->doRest();
    $woman->goToShopping();
    $woman->doShopping();
    $woman->goHome();
    
    $man->goHome();
    $man->doEat();
    $man->goToJob();
    $man->doWork();
    $man->goHome();
    
    $child->goHome();
    $child->doEat();
    $child->goToSchool();
    $child->doLearn();
    $child->doPlay();
    $child->goHome();