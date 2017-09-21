# HHVM 3.20.1 Use of word 'Type' bug

To see it working correctly in hhvm 3.21.0 run:

`docker-compose -f dc-hhvm-3-21-0.yml up`

To see it broken in hhvm 3.21.1 run:

`docker-compose -f dc-hhvm-3-21-1.yml up`

Running these commands will output:

```
jason@jasonmbp:hhvm-test()$ docker-compose -f dc-hhvm-3-21-0.yml up
Starting hhvmtest_hack_1
Attaching to hhvmtest_hack_1
hack_1  | set_mempolicy: Operation not permitted
hack_1  | HipHop VM 3.21.0 (rel)
hack_1  | Compiler: tags/HHVM-3.21.0-0-gbdbaff80f67e02080f1ea377d30efee63f10126d
hack_1  | Repo schema: 1381c379b9e7d8cd9efa2ce49aeb6f699919dc3a
hack_1  | set_mempolicy: Operation not permitted
hack_1  | Hello
hhvmtest_hack_1 exited with code 0
jason@jasonmbp:hhvm-test()$ docker-compose -f dc-hhvm-3-21-1.yml up                                                                                                                                                                                            
Recreating hhvmtest_hack_1
Attaching to hhvmtest_hack_1
hack_1  | set_mempolicy: Operation not permitted
hack_1  | HipHop VM 3.21.1 (rel)
hack_1  | Compiler: tags/HHVM-3.21.1-0-gc8603b5a88feea9f5f2fc99d2c7d051d878ccc75
hack_1  | Repo schema: afcd80435695be5c36f9204c827b13a583504338
hack_1  | set_mempolicy: Operation not permitted
hack_1  |
hack_1  | Fatal error: Uncaught Error: syntax error, unexpected T_TYPE, expecting '[' or '{' in /src/main.php:8
hack_1  | Stack trace:
hack_1  | #0 {main}
hhvmtest_hack_1 exited with code 255
```

