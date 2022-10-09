#![feature(test)]
extern crate test;
fn main() {
    match check_palindrome("malayalam") {
        Ok(data) => {
            println!("{}", data);
        }
        Err(data) => {
            println!("{}", data);
        }
    }
}

fn check_palindrome(s: &str) -> Result<bool, String> {
    let v: Vec<char> = s.chars().collect();
    let mut i = 0;
    let mut j = v.len() - 1;
    println!("{:?}", v);
    while i < j {
        if v[i] != v[j] {
            return Err(String::from("Not a palindrome String!"));
        }

        i += 1;
        j -= 1;
    }

    Ok(true)
}

#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test1() {
        assert_eq!(check_palindrome("malayalam"), Ok(true));
    }
    #[test]
    fn test2() {
        assert_eq!(
            check_palindrome("helloworld"),
            Err(String::from("Not a palindrome String!"))
        );
    }

    #[bench]
    fn time_complexity(b: &mut test::Bencher) {
        b.iter(|| check_palindrome("abcdefghhgfedcba"));
    }
}
