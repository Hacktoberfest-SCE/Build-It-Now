fn main() {
    let mut l = List::<i64>::create_list();
    l.append_node(5);
    l.append_node(6);
    l.append_node(7);
    println!("{:?}", l);
}

#[derive(Debug, PartialEq)]
struct Node<T: PartialEq> {
    data: T,
    next: Option<Box<Node<T>>>,
}

#[derive(Debug)]
struct List<T: PartialEq> {
    start: Box<Node<T>>,
}

impl<T: PartialEq> List<T> {
    fn create_list() -> Box<List<i32>> {
        let newnode = Node::newnode(0);
        Box::new(List { start: newnode })
    }

    fn append_node(&mut self, data: T) {
        let newnode = Node::newnode(data);
        let mut t = self.start.as_mut();
        while t.next != None {
            t = t.next.as_mut().unwrap();
        }
        t.next = Some(newnode);
    }

    fn delete_node(&mut self) {
        let mut t = self.start.as_mut();
        let mut parent = &t;
        while t.next != None {
            t = t.next.as_mut().unwrap();
            parent = &t;
        }
        *(parent).next = None;
    }
}

impl<T: PartialEq> Node<T> {
    fn newnode(data: T) -> Box<Node<T>> {
        Box::new(Self {
            data: data,
            next: None,
        })
    }
}
