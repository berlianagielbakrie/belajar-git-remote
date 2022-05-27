<?php

/**Function Overriding
 * 
 * - function overriding adalah kemampuan mendkalarasikan 
 * ulang function di child class, yang suda ada diparent class
 * 
 * - saat kita melakukan proses overriding tersebut, secara otomatis
 * ketika kita membuat object dari class child, function yang di clas
 * parent di bisa diakses lagi karena sudah ditimpa
 */

 require_once "data/manager.php";


 $manager = new Manager();
 $manager->name = "BUDI";

 $vp = new VicePresident();
 $vp->name = "EKO";

 $manager->sayHello("Joko");
 $vp->sayhello("Komang");
 