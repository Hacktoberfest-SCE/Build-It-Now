// You are given an n x n 2D matrix representing an image, rotate the image by 90 degrees (clockwise).
// You have to rotate the image in-place, which means you have to modify the input 2D matrix directly. 
// DO NOT allocate another 2D matrix and do the rotation.


func rotate(matrix [][]int)  {
    n, k := len(matrix), 0
    temp := []int{}
    
    for i := 0; i < n; i++ {
        for j:=n-1; j > -1; j-- {
            temp = append(temp, matrix[j][i])
        }
    }
    
    for i := 0; i <n; i++ {
        for j:=0; j < n; j++ {
            matrix[i][j] = temp[k]
            k++
        }
    }

}
