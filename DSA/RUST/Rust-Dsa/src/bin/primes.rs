#![feature(test)]
extern crate test;
fn main() {
    match check_prime(9973) {
        Ok(_) => {
            println!("Prime Number!");
        }
        Err(data) => {
            println!("{}", data);
        }
    }
}

fn check_prime(n: u64) -> Result<bool, String> {
    for i in 2..(n as f64).sqrt().ceil() as u64 {
        if n % i == 0 {
            return Err(String::from("Not a prime number!"));
        }
    }
    Ok(true)
}
#[cfg(test)]
mod tests {
    use super::*;

    #[test]
    fn test1() {
        assert_eq!(check_prime(9973), Ok(true));
    }
    #[test]
    fn test2() {
        assert_eq!(check_prime(9972), Err(String::from("Not a prime number!")));
    }

    #[bench]

    fn time_complexity(b: &mut test::Bencher) {
        b.iter(|| check_prime(9973));
    }
}
