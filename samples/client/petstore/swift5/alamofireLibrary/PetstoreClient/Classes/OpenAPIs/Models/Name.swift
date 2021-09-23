//
// Name.swift
//
// Generated by openapi-generator
// https://openapi-generator.tech
//

import Foundation
#if canImport(AnyCodable)
import AnyCodable
#endif

/** Model for testing model name same as property name */
public struct Name: Codable, Hashable {

    public var name: Int
    public var snakeCase: Int?
    public var property: String?
    public var _123number: Int?

    public init(name: Int, snakeCase: Int? = nil, property: String? = nil, _123number: Int? = nil) {
        self.name = name
        self.snakeCase = snakeCase
        self.property = property
        self._123number = _123number
    }

    public enum CodingKeys: String, CodingKey, CaseIterable {
        case name
        case snakeCase = "snake_case"
        case property
        case _123number = "123Number"
    }

    // Encodable protocol methods

    public func encode(to encoder: Encoder) throws {
        var container = encoder.container(keyedBy: CodingKeys.self)
        try container.encode(name, forKey: .name)
        try container.encodeIfPresent(snakeCase, forKey: .snakeCase)
        try container.encodeIfPresent(property, forKey: .property)
        try container.encodeIfPresent(_123number, forKey: ._123number)
    }
}

