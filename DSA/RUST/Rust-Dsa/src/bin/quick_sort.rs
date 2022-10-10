#![feature(test)]

use std::fmt::Debug;
extern crate test;
fn main() {
    let mut a = vec![7, 2, 5, 0, 1, 8, 9, 10];
    let length = a.len() as i32;
    println!("Before Sort:{:?}", a);
    quick_sort(&mut a, 0, length - 1);
    println!("After Sort:{:?}", a);
}

fn partition<T: PartialEq + PartialOrd + Copy + Debug>(
    array: &mut Vec<T>,
    start: i32,
    end: i32,
) -> i32 {
    let pivot = array[end as usize];
    let mut i = start - 1;

    for j in start..=end - 1 {
        if array[j as usize] < pivot {
            i = i + 1;
            let tmp = array[j as usize];
            array[j as usize] = array[i as usize];
            array[i as usize] = tmp;
        }
    }

    let tmp = array[(i as i32 + 1) as usize];
    array[(i as i32 + 1) as usize] = array[end as usize];
    array[end as usize] = tmp;

    return i + 1;
}

fn quick_sort<T: PartialEq + PartialOrd + Copy + Debug>(array: &mut Vec<T>, start: i32, end: i32) {
    if start < end {
        let pi_idx = partition(array, start, end);
        quick_sort(array, start, pi_idx - 1);
        quick_sort(array, pi_idx + 1, end);
    }
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test_int() {
        let mut array = vec![5, 4, 3, 2, 1, 0];
        quick_sort(&mut array, 0, 5);
        assert_eq!(array, vec![0, 1, 2, 3, 4, 5]);
    }
    #[test]
    fn test_float() {
        let mut array = vec![5.87, 100.87, 3.87, 2.34, 10000.76, 0.0];
        quick_sort(&mut array, 0, 5);
        assert_eq!(array, vec![0.0, 2.34, 3.87, 5.87, 100.87, 10000.76]);
    }
    #[test]
    fn test_char() {
        let mut a = vec!['e', 'd', 'c', 'b', 'a'];
        quick_sort(&mut a, 0, 4);
        assert_eq!(a, vec!['a', 'b', 'c', 'd', 'e']);
    }
    #[bench]
    fn time_complexity(b: &mut test::Bencher) {
        let mut array = vec![1, 9, 6, 10000, 8];

        b.iter(|| quick_sort(&mut array, 0, 4));
    }
}
