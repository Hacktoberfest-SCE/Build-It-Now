class Solution {
    fun threeSumClosest(nums: IntArray, target: Int): Int {
        var closest = nums.first() + nums[1] + nums.last()
        val list = nums.sorted()
        (0..list.size - 2).forEach {
            var second = it + 1
            var end = list.size - 1
            while (second < end) {
                var sum = list[it] + list[second] + list[end]
                if (sum > target) end-- else second++
                if (Math.abs(sum - target) < Math.abs(closest - target)) closest = sum
            }
        }

        return closest
    }
}
