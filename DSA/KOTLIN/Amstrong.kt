fun main(args: Array<String>) {
    val number = 371
    var originalNumber: Int
    var remainder: Int
    var result = 0

    originalNumber = number

    while (originalNumber != 0) {
        remainder = originalNumber % 10
        result += Math.pow(remainder.toDouble(), 3.0).toInt()
        originalNumber /= 10
    }

    if (result == number)
        println("$number is an Armstrong number.")
    else
        println("$number is not an Armstrong number.")
}

// output
// 371 is an Armstrong number.
// 
