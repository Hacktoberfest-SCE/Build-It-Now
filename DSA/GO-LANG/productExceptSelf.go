func productExceptSelf(nums []int) []int {
    var res= make([]int,len(nums))
    curr :=1
    for i:=0;i<len(nums);i++{
        res[i]=curr
        curr=curr*nums[i]
    }
    curr=1
    for i:=len(nums)-1;i>=0;i--{
        res[i]=res[i]*curr;
        curr=curr*nums[i]
    }
    return res
}
