fun main(args: Array<String>) {

    val num = 10
    var factorial: Long = 1
    for (i in 1..num) {
        // factorial = factorial * i;
        factorial *= i.toLong()
    }
    println("Factorial of $num = $factorial")
}

//output
// Factorial of 10 = 3628800
