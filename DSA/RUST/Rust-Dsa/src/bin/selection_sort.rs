fn main() {
    let mut a = vec!['e', 'd', 'c', 'b', 'a'];
    println!("Before Sort:{:?}", a);
    selection_sort(&mut a);
    println!("After Sort:{:?}", a);
}

fn selection_sort<T: PartialEq + PartialOrd + Copy>(array: &mut Vec<T>) {
    let mut temp: T;
    for i in 0..array.len() {
        for j in i + 1..array.len() {
            if array[j] < array[i] {
                temp = array[i];
                array[i] = array[j];
                array[j] = temp;
            }
        }
    }
}

#[cfg(test)]
mod test {
    use super::*;

    #[test]
    fn test_int() {
        let mut array = vec![5, 4, 3, 2, 1, 0];
        selection_sort(&mut array);
        assert_eq!(array, vec![0, 1, 2, 3, 4, 5]);
    }
    #[test]
    fn test_float() {
        let mut array = vec![5.87, 100.87, 3.87, 2.34, 10000.76, 0.0];
        selection_sort(&mut array);
        assert_eq!(array, vec![0.0, 2.34, 3.87, 5.87, 100.87, 10000.76]);
    }
    #[test]
    fn test_char() {
        let mut a = vec!['e', 'd', 'c', 'b', 'a'];
        selection_sort(&mut a);
        assert_eq!(a, vec!['a', 'b', 'c', 'd', 'e']);
    }
}
