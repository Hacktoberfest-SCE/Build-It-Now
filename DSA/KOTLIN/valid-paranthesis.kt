class Solution {
    fun isValid(s: String): Boolean {
    val stack = ArrayDeque<Char>()
    s.forEach {
        when(it) {
            '(', '[', '{' -> stack.push(it)
            ')' -> if (stack.poll() != '(') return false
            '}' -> if (stack.poll() != '{') return false
            ']' -> if (stack.poll() != '[') return false
            }
        }
    
        return stack.isEmpty()
    }
}
