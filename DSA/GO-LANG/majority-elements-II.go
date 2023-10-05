func majorityElement(nums []int) []int {
    num1,num2,cnt1,cnt2 := -1,-1,0,0
    for _, val  := range nums{
        if val == num1{
            cnt1++
        } else if val == num2{
            cnt2++
        } else if cnt1 == 0 {
            num1=val
            cnt1=1
        } else if cnt2 ==0 {
            num2 = val
            cnt2 =1
        } else {
            cnt1--
            cnt2--
        }
    }
    cnt1=0
    cnt2=0
    for _, val := range nums{
        if val==num1{
            cnt1++
        } else if val == num2{
            cnt2++
        }
    }
    var res = make([]int,0)
    if cnt1>len(nums)/3{
        res=append(res,num1)
    } 
    if cnt2> len(nums)/3{
        res=append(res,num2)
    }
    return res
}
