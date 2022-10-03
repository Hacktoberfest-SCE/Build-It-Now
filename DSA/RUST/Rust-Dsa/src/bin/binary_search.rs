fn main() {
    let mut a = [16, 5, 3, 6, 8];
    let key = 3;
    let len = a.len();
    let res = binary_search(&mut a, key, 0, len as i32);

    match res {
        1 => println!("Key found!"),
        0 => println!("Key not found"),
        _ => println!("invalid"),
    }
}

fn binary_search<T: PartialEq + PartialOrd + Copy + Ord>(
    a: &mut [T],
    key: T,
    left: i32,
    right: i32,
) -> i32 {
    a.sort();
    let mid: i32 = (left + right) / 2;

    if left < right {
        if key < a[mid as usize] {
            return binary_search(a, key, left, mid);
        } else if key > a[mid as usize] {
            return binary_search(a, key, mid + 1, right);
        } else {
            return 1;
        }
    } else {
        println!("Key not found!");
        return 0;
    }
}

#[cfg(test)]
mod tests {
    use super::*;
    #[test]
    fn test_int() {
        let mut array = [1, 9, 6, 10000, 8];
        assert_eq!(binary_search(&mut array, 9, 0, 4), 1);
    }
}
