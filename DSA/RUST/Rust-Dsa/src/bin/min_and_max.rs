fn main() {
    let a = [5, 4, 3, 2, 1, 0];

    let max_min = min_max(&a);

    println!("Max :{} \n Min :{}", max_min.0, max_min.1);
}

fn min_max<T: PartialEq + PartialOrd + Copy>(a: &[T]) -> (T, T) {
    let mut min = a[0];
    let mut max = a[0];
    for i in 1..a.len() {
        if a[i] < min {
            min = a[i]
        }

        if a[i] > max {
            max = a[i]
        }
    }
    return (max, min);
}

#[cfg(test)]
mod tests {
    use super::*;
    #[test]
    fn test_int() {
        let array = [1, 9, 6, 10000, 8];
        assert_eq!(min_max(&array), (10000i32, 1i32));
    }
    #[test]
    fn test_float() {
        let array = [1.2, 3.4, 7.9, 99.9, 6.0];
        assert_eq!(min_max(&array), (99.9, 1.2));
    }
    #[test]
    fn test_char() {
        let array = ['a', 'b', 'c', 'd', 'e'];
        assert_eq!(min_max(&array), ('e', 'a'));
    }
}
