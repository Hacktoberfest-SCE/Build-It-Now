fn main() {
    let mut a = vec!['e', 'd', 'c', 'b', 'a'];
    println!("Before Sort:{:?}", a);
    insertion_sort(&mut a);
    println!("After Sort:{:?}", a);
}

fn insertion_sort<T: PartialEq + PartialOrd + Copy>(array: &mut Vec<T>) {
    for i in 1..array.len() {
        let mut j = (i - 1) as i32;
        let key = array[i];
        while j >= 0 && key < array[j as usize] {
            array[(j + 1) as usize] = array[j as usize];
            j = j - 1;
        }
        array[(j + 1) as usize] = key;
    }
}

#[cfg(test)]
mod test {
    use super::*;

    #[test]
    fn test_int() {
        let mut array = vec![5, 4, 3, 2, 1, 0];
        insertion_sort(&mut array);
        assert_eq!(array, vec![0, 1, 2, 3, 4, 5]);
    }
    #[test]
    fn test_float() {
        let mut array = vec![5.87, 100.87, 3.87, 2.34, 10000.76, 0.0];
        insertion_sort(&mut array);
        assert_eq!(array, vec![0.0, 2.34, 3.87, 5.87, 100.87, 10000.76]);
    }
    #[test]
    fn test_char() {
        let mut a = vec!['e', 'd', 'c', 'b', 'a'];
        insertion_sort(&mut a);
        assert_eq!(a, vec!['a', 'b', 'c', 'd', 'e']);
    }
}
