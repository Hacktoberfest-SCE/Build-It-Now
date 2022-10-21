<!-- Find Numbers with Even Number of Digits -->

impl Solution {
    pub fn find_numbers(nums: Vec<i32>) -> i32 {
        nums.iter()
            .filter(|&&x| {
                let (mut x, mut digits) = (x, 0);
                while x > 0 {
                    x /= 10;
                    digits += 1;
                }
                digits % 2 == 0
            })
            .count() as _
    }
}
      
      
