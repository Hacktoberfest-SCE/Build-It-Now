#![feature(test)]
extern crate test;

fn main() {
    let res = sub_string_search("hello_world", "o_");
    println!("result :{}", res);
}

pub fn sub_string_search(s1: &str, s2: &str) -> bool {
    let v1: Vec<char> = s1.chars().collect();
    let v2: Vec<char> = s2.chars().collect();
    let mut idx: i8 = 0;

    let mut count = 0;
    println!("v1:{:?}", v1);
    println!("v2:{:?}", v2);
    let mut flag = 0;

    for i in 0..v1.len() {
        if (idx as usize) < v2.len() {
            if v2[idx as usize] == v1[i] {
                println!("idx:{}", idx);
                idx += 1;
                count += 1;
                flag = 1;
                if count == v2.len() {
                    return true;
                }
            } else {
                if flag == 1 {
                    count = 0;
                    idx = 0;
                }
            }
        }
    }

    false
}

#[cfg(test)]
mod tests {
    use super::*;
    #[test]
    fn test1() {
        assert_eq!(
            true,
            sub_string_search("28d82fh8nsu83h7sc83nu79ika0z02fshda", "fh8nsu")
        );
    }
    #[test]
    fn test2() {
        assert_eq!(
            false,
            sub_string_search("aiye97bjxgzuct76879skfnivrqn.zcouxo", "fh8nsu")
        );
    }

    #[bench]
    fn time_complexity(b: &mut test::Bencher) {
        b.iter(|| sub_string_search("zqkeouziqbdi62bidtd86e", "294hcizyc862e"));
    }
}
