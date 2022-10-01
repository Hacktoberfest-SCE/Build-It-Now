// Given n non-negative integers representing an elevation map where the width of each bar is 1, compute how much water it can trap after raining.


func trap(height []int) int {
    left := 0
    right := len(height)-1
    left_max := 0
    right_max := 0
    answer := 0
    for left<right{
        if height[left] < height[right]{
            if height[left] > left_max{
                left_max = height[left]
            }
            answer+= left_max-height[left]
            left++
        }else{
            if height[right] > right_max{
                right_max = height[right]
            }
            answer+= right_max-height[right]
            right--
        }
    }
    return answer
