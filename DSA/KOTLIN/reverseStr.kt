
fun reverse(str: String): String {
    val chars = CharArray(str.length)
    str.indices.forEach { chars[str.length - it - 1] = str[it] }
    return String(chars)
}
 
fun main() {
    var str = "Hello"
 
    var reverse =reverse(str)
 
    println(reverse)        
  // output
  // olleH
}
